<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\About\IndexAbout;
use App\Http\Requests\Admin\About\StoreAbout;
use App\Http\Requests\Admin\About\UpdateAbout;
use App\Http\Requests\Admin\About\DestroyAbout;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\About;

class AboutsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexAbout $request
     * @return Response|array
     */
    public function index(IndexAbout $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(About::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'created_by', 'updated_by', 'count', 'name', 'birthday', 'phone', 'email', 'website', 'address'],

            // set columns to searchIn
            ['id', 'keterangan', 'name', 'phone', 'email', 'website', 'address']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.about.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.about.create');

        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreAbout $request
     * @return Response|array
     */
    public function store(StoreAbout $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the About
        $about = About::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/abouts'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/abouts');
    }

    /**
     * Display the specified resource.
     *
     * @param  About $about
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(About $about)
    {
        $this->authorize('admin.about.show', $about);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  About $about
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(About $about)
    {
        $this->authorize('admin.about.edit', $about);

        return view('admin.about.edit', [
            'about' => $about,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateAbout $request
     * @param  About $about
     * @return Response|array
     */
    public function update(UpdateAbout $request, About $about)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values About
        $about->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/abouts'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/abouts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyAbout $request
     * @param  About $about
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroyAbout $request, About $about)
    {
        $about->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
