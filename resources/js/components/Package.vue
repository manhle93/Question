<template>
    <div>
      <br>
      <a href="/home"><button type="button" style="width: 450px; height: 40px; font-weight: bold; font-family: 'Times New Roman', Times, serif; font-size: 16px;" class="btn btn-primary">TRANG CHỦ</button></a>
        <a href="/packageadd"><button type="button" style="width: 450px; height: 40px; font-weight: bold; font-family: 'Times New Roman', Times, serif; font-size: 16px;" class="btn btn-dark">TẠO GÓI CÂU HỎI</button></a>
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
            <td>
            <button class="btn btn-success" @click="nhap(goi.id)">Nhập câu hỏi</button>
            <button class="btn btn-warning" @click="view(goi.id)">Toàn bộ câu hỏi</button>  </td>
            <td>
              <button type="button" class="btn btn-danger" @click="xoa(goi.id)">Xóa</button>
            </td>
          </tr>
        </tbody>
    </table>
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
        nhap(id){
            window.location.href = "/question/add/" + id
        },
        view(id){
            window.location.href = "/question/" + id
        }
    }

}
</script>

