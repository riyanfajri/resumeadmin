<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': this.fields.name && this.fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.skill.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': this.fields.name && this.fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.skill.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('persen'), 'has-success': this.fields.persen && this.fields.persen.valid }">
    <label for="persen" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.skill.columns.persen') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.persen" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('persen'), 'form-control-success': this.fields.persen && this.fields.persen.valid}" id="persen" name="persen" placeholder="{{ trans('admin.skill.columns.persen') }}">
        <div v-if="errors.has('persen')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('persen') }}</div>
    </div>
</div>


