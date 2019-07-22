@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.pendidikan.actions.edit', ['name' => $pendidikan->name]))

@section('body')

    <div class="container-xl">

        <div class="card">

            <pendidikan-form
                :action="'{{ $pendidikan->resource_url }}'"
                :data="{{ $pendidikan->toJson() }}"
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>

                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.pendidikan.actions.edit', ['name' => $pendidikan->name]) }}
                    </div>

                    <div class="card-body">

                        @include('admin.pendidikan.components.form-elements')

                    </div>

                    <div class="card-footer">
	                    <button type="submit" class="btn btn-primary" :disabled="submiting">
		                    <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
		                    {{ trans('brackets/admin-ui::admin.btn.save') }}
	                    </button>
                    </div>

                </form>

        </pendidikan-form>

    </div>

</div>

@endsection