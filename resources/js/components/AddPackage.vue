<template>
    <div>
<div v-if="show" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Thành công!</strong> Tạo gói câu hỏi thành công.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <label class="label">Tên gói</label>
        <br>
        <input type="text" placeholder="Nhập tên gói câu hỏi" style="width: 300px" name="name" v-model="name">
        <button class="btn btn-success" @click="luu">Nhập</button>  
        <br>
        <br>
         <button class="btn btn-danger" @click="chuyen">Danh sách gói câu hỏi</button> 
               
    </div>
</template>
<script>
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.min.js'

export default {
    data(){
        return {
            name: null,
            show: false,
        };
    },
    methods: {
        luu(){
            axios.post('/package/add', {name: this.name})
            .then(res=>{
                this.show = true,
                this.name = '',
                alert("I am an alert box!")    
            })
        }, 
        chuyen(){
             window.location.href = "/package/";
        }
    }
}
</script>

