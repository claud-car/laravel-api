let app= new Vue({
    el: '#root',
    data: {
        comics:[],
        api_token: 'SMl2DC8y3eTWODCDAGBPYeXpal5Qtm9uzsyyLyOZNgVITbw9ECd7aR8xEVVig3MBIiKsSeELUEDvPqiE'
    },
    created() {
        axios.get('http://localhost:8000/api/comics',{
            params:{
                api_key: this.api_token
            }
        }).then((response) => {
            this.comics = response.data.data;
            console.log(response);
        })
    }
});