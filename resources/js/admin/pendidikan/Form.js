import AppForm from '../app-components/Form/AppForm';

Vue.component('pendidikan-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                level:  '' ,
                alamat:  '' ,
                date:  '' ,
                
            }
        }
    }

});