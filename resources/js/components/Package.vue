<template>
    <div>
    <table
        class="table table-bordered table-striped dataTable"
        role="grid"
        style="margin-top: 20px;"
      >
        <thead>
          <tr role="row">
            <th>Gói câu hỏi</th>
            <th>Câu hỏi</th>
            <th>Xóa gói</th>
          </tr>
        </thead>
         <tbody>
          <tr v-for="goi in gois">
            <td>{{goi.name}}</td>
            <td><p>xx Câu</p>
            <button class="btn btn-success" @click="nhap">Nhập câu hỏi</button>
            <button class="btn btn-warning" @click="view">Toàn bộ câu hỏi</button>  </td>
            <td>
              <a class="btn btn-light" @click="xoa(goi.id)">
                <i class="fas fa-trash">Xóa</i>
              </a>
            </td>
          </tr>
        </tbody>
    </table>
    <button class="btn btn-danger" @click="chuyen">Nhập gói câu hỏi</button> 
    </div>
    
</template>

<script>
export default {
    props: ['gois'],
    methods: {
        xoa(id){
            if(confirm("Bạn có chắc chắn muốn xóa toàn bộ gói câu hỏi")) {
            axios.delete('/package/'+ id +'/delete')
            .then(res=>{window.location.href = "/package/"});
            }
        },
        chuyen(){
            window.location.href = "/package-add/"
        },
        nhap(){
            window.location.href = "/question/add/"
        }
    }
    
}
</script>

