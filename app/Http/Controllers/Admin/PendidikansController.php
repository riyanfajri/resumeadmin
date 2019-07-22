<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\Pendidikan\IndexPendidikan;
use App\Http\Requests\Admin\Pendidikan\StorePendidikan;
use App\Http\Requests\Admin\Pendidikan\UpdatePendidikan;
use App\Http\Requests\Admin\Pendidikan\DestroyPendidikan;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Pendidikan;

class PendidikansController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexPendidikan $request
     * @return Response|array
     */
    public function index(IndexPendidikan $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Pendidikan::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'level', 'alamat', 'date'],

            // set columns to searchIn
            ['id', 'name', 'level', 'alamat', 'date']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.pendidikan.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.pendidikan.create');

        return view('admin.pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePendidikan $request
     * @return Response|array
     */
    public function store(StorePendidikan $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Pendidikan
        $pendidikan = Pendidikan::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/pendidikans'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/pendidikans');
    }

    /**
     * Display the specified resource.
     *
     * @param  Pendidikan $pendidikan
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Pendidikan $pendidikan)
    {
        $this->authorize('admin.pendidikan.show', $pendidikan);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Pendidikan $pendidikan
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Pendidikan $pendidikan)
    {
        $this->authorize('admin.pendidikan.edit', $pendidikan);

        return view('admin.pendidikan.edit', [
            'pendidikan' => $pendidikan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePendidikan $request
     * @param  Pendidikan $pendidikan
     * @return Response|array
     */
    public function update(UpdatePendidikan $request, Pendidikan $pendidikan)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values Pendidikan
        $pendidikan->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/pendidikans'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/pendidikans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyPendidikan $request
     * @param  Pendidikan $pendidikan
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyPendidikan $request, Pendidikan $pendidikan)
    {
        $pendidikan->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
