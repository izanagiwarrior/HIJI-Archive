<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use App\Models\Marketplaces;
use App\Models\Data;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    public function statistik()
    {
        $data = Data::all();
        $products = Products::all();
        $marketplace = Marketplaces::all();
        return view('user.statistik', compact('data', 'products', 'marketplace'));
    }

    public function product()
    {
        $products = Products::all();

        return view('user.product', compact('products'));
    }

    public function find(Request $request)
    {
        $cari = $request->cari;
        $products = Products::where('nama_product', $cari)->get();
        return view('user.findProduct', compact('products'));
    }

    public function category(Request $request)
    {
        $cari = $request->cari;
        $products = Products::where('kategori_product', $cari)->get();
        return view('user.categoryProduct', compact('products'));
    }

    public function addProduct()
    {
        return view('user.addProduct');
    }


    public function addProductProcess(Request $request)
    {
        if ($files = $request->file('img_path')) {
            $destinationPath = 'public/images/';
            $file = $request->file('img_path');
            // upload path         
            $profileImage = rand(1000, 20000) . "." .
                $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $profileImage);
            $files->move($destinationPath, $profileImage);
        }

        $products = new Products();
        $products->nama_product = $request->nama_product;
        $products->harga_product = $request->harga_product;
        $products->stock_product = $request->stock_product;
        $products->deskripsi = $request->deskripsi;
        $products->kategori_product = $request->kategori_product;
        $products->img_path = $pathImg;
        $products->save();

        return redirect(route('product'));
    }

    public function detailProduct($id)
    {
        $products = Products::find($id);
        $marketplace = Marketplaces::all();
        return view('user.detailProduct', compact('products', 'marketplace'));
    }

    public function updateProduct($id)
    {
        $products = Products::find($id);

        return view('user.updateProduct', compact('products'));
    }

    public function updateProductProcess($id, Request $request)
    {

        $products = Products::find($id);
        $data = Data::all();
        foreach ($data as $dt) {
            if ($dt->nama_product == $products->nama_product) {
                $dt->nama_product = $request->nama_product;
                $dt->save();
            }
        }
        $products->nama_product = $request->nama_product;
        $products->harga_product = $request->harga_product;
        $products->stock_product = $request->stock_product;
        $products->deskripsi = $request->deskripsi;
        $products->kategori_product = $request->kategori_product;
        $products->save();

        return redirect(route('product'));
    }

    public function deleteProduct(Request $request)
    {
        $products = Products::find($request->id);
        $data = Data::all();
        foreach ($data as $dt) {
            if ($dt->nama_product == $products->nama_product) {
                $dt->delete();
            }
        }
        $products->delete();

        return redirect(route('product'));
    }

    public function marketplace()
    {
        $marketplace = Marketplaces::all();

        return view('user.marketplace', compact('marketplace'));
    }

    public function addMarketplace()
    {
        return view('user.addMarketplace');
    }

    public function addMarketplaceProcess(Request $request)
    {
        $marketplace = new Marketplaces();
        $marketplace->nama_marketplace = $request->nama_marketplace;
        $marketplace->nama_toko = $request->nama_toko;
        $marketplace->save();

        return redirect(route('marketplace'));
    }

    public function updateMarketplace($id)
    {
        $marketplace = Marketplaces::find($id);

        return view('user.updateMarketplace', compact('marketplace'));
    }

    public function updateMarketplaceProcess($id, Request $request)
    {
        $marketplace = Marketplaces::find($id);
        $data = Data::all();
        foreach ($data as $dt) {
            if ($dt->marketplace == $marketplace->nama_marketplace) {
                $dt->marketplace = $request->nama_marketplace;
            }
        }
        $marketplace->save();
        $marketplace->nama_marketplace = $request->nama_marketplace;
        $marketplace->nama_toko = $request->nama_toko;

        return redirect(route('marketplace'));
    }

    public function deleteMarketplace(Request $request)
    {
        $marketplace = Marketplaces::find($request->id);
        $data = Data::all();
        foreach ($data as $dt) {
            if ($dt->marketplace == $marketplace->nama_marketplace) {
                $dt->delete();
            }
        }
        $marketplace->delete();

        return redirect(route('marketplace'));
    }

    public function profile()
    {
        $user = User::all();
        return view('user.profile', compact('user'));
    }

    public function editProfile($id)
    {
        $users = User::find($id);
        return view('user.editProfile', compact('users'));
    }

    public function editProfileProcess($id, Request $request)
    {
        $users = User::find($id);
        $users->password = bcrypt($request->password);
        $users->save();
        return view('user.profile', compact('users'));
    }

    public function adminHome()
    {
        return view('admin.adminHome');
    }

    public function user()
    {
        $user = User::all();
        return view('admin.user', compact('user'));
    }

    public function destroyUser(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return redirect(route('admin.user'));
    }

    public function order($id, Request $request)
    {
        $products = Products::find($id);
        $data = new Data();

        if ($request->jumlah > $products->stock_product) {
            return back()->with('error', 'Maksimal Stock ada ' . $products->stock_product . " !");
        } else {
            $products->stock_product = $products->stock_product - $request->jumlah;
            $data->nama_product = $request->nama_product;
            $data->jumlah = $request->jumlah;
            $data->marketplace = $request->marketplace;
            $data->tanggal_terjual = $request->tanggal_terjual;
            $data->save();
            $products->save();

            return redirect(route('product'));
        }
    }

    public function orderList()
    {
        $data = Data::all();

        return view('user.order', compact('data'));
    }

    public function order_category(Request $request)
    {
        $cari = $request->cari;
        $orders = Data::where('marketplace', $cari)->get();
        return view('user.order_category', compact('orders'));
    }

    public function statistikCategory(Request $request)
    {
        $cari = $request->cari;
        $products = Products::all();
        $marketplace = Marketplaces::all();
        $data = Data::where('marketplace', $cari)->get();
        if (count($data) < 1) {
            return view('user.statistikCategory0', compact('marketplace', 'products'));
        } else {
            return view('user.statistikCategory', compact('data', 'products', 'marketplace'));
        }
    }

    public function statistikProduct(Request $request)
    {
        $cari = $request->cari;
        $products = Products::where('nama_product', $cari)->get();
        $marketplace = Marketplaces::all();
        $data = Data::where('nama_product', $cari)->get();
        if (count($data) < 1) {
            $products = Products::all();
            return view('user.statistikCategory0', compact('marketplace', 'products'));
        } else {
            $product = Products::all();
            return view('user.statistikProduct', compact('data', 'product', 'marketplace', 'products'));
        }
    }

    public function deleteOrder(Request $request)
    {
        $data = Data::find($request->id);
        $product = Products::where('nama_product', $data->nama_product)->get();
        foreach ($product as $pd) {
            $pd->stock_product = $pd->stock_product + $data->jumlah;
            $pd->save();
        }
        $data->delete();

        return redirect(route('orderList'));
    }

    public function update_user($id, Request $request)
    {
        $user = User::find($id);
        return view('admin.editUser', compact('user'));
    }

    public function update_user_process($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->save();
        return redirect(route('admin.user'));
    }
}
