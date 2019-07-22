import AppForm from '../app-components/Form/AppForm';

Vue.component('about-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                keterangan:  '' ,
                created_by:  '' ,
                updated_by:  '' ,
                count:  '' ,
                name:  '' ,
                birthday:  '' ,
                phone:  '' ,
                email:  '' ,
                website:  '' ,
                address:  '' ,
                
            }
        }
    }

});