<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\Pengalaman\IndexPengalaman;
use App\Http\Requests\Admin\Pengalaman\StorePengalaman;
use App\Http\Requests\Admin\Pengalaman\UpdatePengalaman;
use App\Http\Requests\Admin\Pengalaman\DestroyPengalaman;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Pengalaman;

class PengalamansController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexPengalaman $request
     * @return Response|array
     */
    public function index(IndexPengalaman $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Pengalaman::class)->processRequestAndGet(
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

        return view('admin.pengalaman.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.pengalaman.create');

        return view('admin.pengalaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePengalaman $request
     * @return Response|array
     */
    public function store(StorePengalaman $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Pengalaman
        $pengalaman = Pengalaman::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/pengalamen'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/pengalamen');
    }

    /**
     * Display the specified resource.
     *
     * @param  Pengalaman $pengalaman
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Pengalaman $pengalaman)
    {
        $this->authorize('admin.pengalaman.show', $pengalaman);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Pengalaman $pengalaman
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Pengalaman $pengalaman)
    {
        $this->authorize('admin.pengalaman.edit', $pengalaman);

        return view('admin.pengalaman.edit', [
            'pengalaman' => $pengalaman,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePengalaman $request
     * @param  Pengalaman $pengalaman
     * @return Response|array
     */
    public function update(UpdatePengalaman $request, Pengalaman $pengalaman)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values Pengalaman
        $pengalaman->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/pengalamen'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/pengalamen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyPengalaman $request
     * @param  Pengalaman $pengalaman
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyPengalaman $request, Pengalaman $pengalaman)
    {
        $pengalaman->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
