<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Portfolio\PortfolioRequest;
use App\Models\Category;
use App\Models\Portfolio;
use App\Services\PortfolioService;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with('category')->asc('name')->get();

        return view('backend.pages.portfolio.manage', compact('portfolios'));
    }

    public function create()
    {
        $categories = Category::asc('name')->pluck('name', 'id');

        return view('backend.pages.portfolio.create', compact('categories'));
    }

    public function store(PortfolioRequest $request, PortfolioService $service)
    {
        $service->store($request->validated());
        flash('success', 'New Portfolio Added!');

        return redirect()->route('portfolio.manage');
    }

    public function edit(Portfolio $portfolio)
    {
        $categories = Category::asc('name')->pluck('name', 'id');

        return view('backend.pages.portfolio.edit', compact('portfolio', 'categories'));
    }

    public function update(PortfolioRequest $request, Portfolio $portfolio, PortfolioService $service)
    {
        $service->update($portfolio, $request->validated());
        flash('success', 'Portfolio Updated!');

        return redirect()->route('portfolio.manage');
    }

    public function destroy(Portfolio $portfolio, PortfolioService $service)
    {
        $service->delete($portfolio);
        flash('error', 'Portfolio Removed!');

        return redirect()->route('portfolio.manage');
    }
}
