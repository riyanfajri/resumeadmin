import AppForm from '../app-components/Form/AppForm';

Vue.component('pengalaman-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                pengalaman:  '' ,
                date:  '' ,
                perusahaan:  '' ,
                
            }
        }
    }

});