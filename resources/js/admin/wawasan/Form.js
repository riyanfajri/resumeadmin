import AppForm from '../app-components/Form/AppForm';

Vue.component('wawasan-form', {
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