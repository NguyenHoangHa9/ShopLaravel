<?php
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController2 extends Controller {
    /**
     * Display a listing of the resourc.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::simplePaginate(5);

        return view('Product.index', compact('products'));
    }
    public function create()
    {
        return view('Product.create');
    }

    public function store (Request $request)
    {
        $product = Product::create([
            'name' => $request ->name,
            'color'=> $request ->color,
            'weight'=> $request ->weight,
            'price'=> $request ->price,
            'description'=> $request ->description,
        ]);

        return redirect()->route('index');

    }
    public function show($id)
    {
       $product = Product::findOrFail($id);

       return view('Product.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request ->name,
            'color'=> $request ->color,
            'weight'=> $request ->weight,
            'price'=> $request ->price,
            'description'=> $request ->description,
        ]);
        return redirect()->route('index');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('index');
    }
}
