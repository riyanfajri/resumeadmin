import AppForm from '../app-components/Form/AppForm';

Vue.component('portfolio-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                image:  '' ,
                judul:  '' ,
                keterangan:  '' ,
                
            }
        }
    }

});