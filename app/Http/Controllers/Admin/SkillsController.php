<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\Skill\IndexSkill;
use App\Http\Requests\Admin\Skill\StoreSkill;
use App\Http\Requests\Admin\Skill\UpdateSkill;
use App\Http\Requests\Admin\Skill\DestroySkill;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Skill;

class SkillsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexSkill $request
     * @return Response|array
     */
    public function index(IndexSkill $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Skill::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'persen'],

            // set columns to searchIn
            ['id', 'name', 'persen']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.skill.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.skill.create');

        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreSkill $request
     * @return Response|array
     */
    public function store(StoreSkill $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Skill
        $skill = Skill::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/skills'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/skills');
    }

    /**
     * Display the specified resource.
     *
     * @param  Skill $skill
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Skill $skill)
    {
        $this->authorize('admin.skill.show', $skill);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Skill $skill
     * @return Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Skill $skill)
    {
        $this->authorize('admin.skill.edit', $skill);

        return view('admin.skill.edit', [
            'skill' => $skill,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateSkill $request
     * @param  Skill $skill
     * @return Response|array
     */
    public function update(UpdateSkill $request, Skill $skill)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values Skill
        $skill->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/skills'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/skills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroySkill $request
     * @param  Skill $skill
     * @return Response|bool
     * @throws \Exception
     */
    public function destroy(DestroySkill $request, Skill $skill)
    {
        $skill->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
