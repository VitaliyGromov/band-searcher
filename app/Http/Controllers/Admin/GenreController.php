<?php
declare(strict_types=1);
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\GenreFilterRequest;
use App\Http\Requests\Genre\GenreFormRequest;
use App\Models\Genre;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class GenreController extends Controller
{
    public function index(GenreFilterRequest $request): View
    {
        $genres = Genre::filter($request->validated())->orderBy('id')->get();

        return view('admin.genres.index', compact('genres'));
    }

    public function store(GenreFormRequest $request): RedirectResponse
    {
        Genre::create([...$request->validated()]);

        return redirect()->back();
    }

    public function update(GenreFormRequest $request, Genre $genre): RedirectResponse
    {
        $genre->update([...$request->validated()]);

        return redirect()->back();
    }

    public function destroy(Genre $genre): RedirectResponse
    {
        $genre->delete();

        return redirect()->back();
    }
}
