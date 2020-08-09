<?php use App\Product;
 
class ProductController extends Controller
{
   

    public function index()
    {
        return Product::all();
    }

    public function show(Product $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $article = Product::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Product $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Product $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}

