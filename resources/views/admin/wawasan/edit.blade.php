@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.wawasan.actions.edit', ['name' => $wawasan->id]))

@section('body')

    <div class="container-xl">

        <div class="card">

            <wawasan-form
                :action="'{{ $wawasan->resource_url }}'"
                :data="{{ $wawasan->toJson() }}"
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>

                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.wawasan.actions.edit', ['name' => $wawasan->id]) }}
                    </div>

                    <div class="card-body">

                        @include('admin.wawasan.components.form-elements')

                    </div>

                    <div class="card-footer">
	                    <button type="submit" class="btn btn-primary" :disabled="submiting">
		                    <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
		                    {{ trans('brackets/admin-ui::admin.btn.save') }}
	                    </button>
                    </div>

                </form>

        </wawasan-form>

    </div>

</div>

@endsection