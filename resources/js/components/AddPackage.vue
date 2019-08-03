<template>
    <div>
<div v-if="show" class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Thành công!</strong> Tạo gói câu hỏi thành công.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<br>
<div>
<a href="/home"><button type="button" style="width: 450px; height: 40px; font-weight: bold; font-family: 'Times New Roman', Times, serif; font-size: 16px;" class="btn btn-primary">TRANG CHỦ</button></a>
        <a href="/package"><button type="button" style="width: 450px; height: 40px; font-weight: bold; font-family: 'Times New Roman', Times, serif; font-size: 16px;" class="btn btn-dark">DANH SÁCH GÓI CÂU HỎI</button></a>
</div>
<br>
        <label class="label">Tên gói</label>
        <input type="text" placeholder="Nhập tên gói câu hỏi" style="width: 300px" name="name" v-model="name">
        <button class="btn btn-success" @click="luu">Nhập</button>              
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
                alert("Tạo gói câu hỏi thành công!")    
            })
        }, 
    }
}
</script>

