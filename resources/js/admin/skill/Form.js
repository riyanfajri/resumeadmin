import AppForm from '../app-components/Form/AppForm';

Vue.component('skill-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                persen:  '' ,
                
            }
        }
    }

});