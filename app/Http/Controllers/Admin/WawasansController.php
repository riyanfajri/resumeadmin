<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\Wawasan\IndexWawasan;
use App\Http\Requests\Admin\Wawasan\StoreWawasan;
use App\Http\Requests\Admin\Wawasan\UpdateWawasan;
use App\Http\Requests\Admin\Wawasan\DestroyWawasan;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Wawasan;

class WawasansController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexWawasan $request
     * @return Response|array
     */
    public function index(IndexWawasan $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Wawasan::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'pengalaman', 'date', 'perusahaan'],

            // set columns to searchIn
            ['id', 'pengalaman', 'date', 'perusahaan']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.wawasan.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.wawasan.create');

        return view('admin.wawasan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreWawasan $request
     * @return Response|array
     */
    public function store(StoreWawasan $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Wawasan
        $wawasan = Wawasan::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/wawasans'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/wawasans');
    }

    /**
     * Display the specified resource.
     *
     * @param  Wawasan $wawasan
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Wawasan $wawasan)
    {
        $this->authorize('admin.wawasan.show', $wawasan);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Wawasan $wawasan
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Wawasan $wawasan)
    {
        $this->authorize('admin.wawasan.edit', $wawasan);

        return view('admin.wawasan.edit', [
            'wawasan' => $wawasan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateWawasan $request
     * @param  Wawasan $wawasan
     * @return Response|array
     */
    public function update(UpdateWawasan $request, Wawasan $wawasan)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values Wawasan
        $wawasan->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/wawasans'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/wawasans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyWawasan $request
     * @param  Wawasan $wawasan
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyWawasan $request, Wawasan $wawasan)
    {
        $wawasan->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
