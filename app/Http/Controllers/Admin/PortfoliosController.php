<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\Portfolio\IndexPortfolio;
use App\Http\Requests\Admin\Portfolio\StorePortfolio;
use App\Http\Requests\Admin\Portfolio\UpdatePortfolio;
use App\Http\Requests\Admin\Portfolio\DestroyPortfolio;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Portfolio;

class PortfoliosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexPortfolio $request
     * @return Response|array
     */
    public function index(IndexPortfolio $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Portfolio::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'image', 'judul'],

            // set columns to searchIn
            ['id', 'image', 'judul', 'keterangan']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.portfolio.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.portfolio.create');

        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePortfolio $request
     * @return Response|array
     */
    public function store(StorePortfolio $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Portfolio
        $portfolio = Portfolio::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/portfolios'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/portfolios');
    }

    /**
     * Display the specified resource.
     *
     * @param  Portfolio $portfolio
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Portfolio $portfolio)
    {
        $this->authorize('admin.portfolio.show', $portfolio);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Portfolio $portfolio
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Portfolio $portfolio)
    {
        $this->authorize('admin.portfolio.edit', $portfolio);

        return view('admin.portfolio.edit', [
            'portfolio' => $portfolio,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePortfolio $request
     * @param  Portfolio $portfolio
     * @return Response|array
     */
    public function update(UpdatePortfolio $request, Portfolio $portfolio)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values Portfolio
        $portfolio->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/portfolios'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/portfolios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyPortfolio $request
     * @param  Portfolio $portfolio
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyPortfolio $request, Portfolio $portfolio)
    {
        $portfolio->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
