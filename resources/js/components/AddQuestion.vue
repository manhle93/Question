<template>
    <div>
        <h1>{{a}}</h1>
        <label class="label">Câu hỏi</label>
        <br>
        <div class="row"><textarea placeholder="Nội dung câu hỏi" rows="5" style="width: 100%" v-model="noidung"></textarea></div>
        <br>
        <label class="label">Câu trả lời</label>
        <table
        class="table table-bordered table-striped dataTable"
        role="grid"
        style="margin-top: 20px;"
      >
        <thead>
          <tr role="row">
            <th style="width: 15%">Phương án</th>
            <th>Câu trả lời</th>
            <th style="width: 20%">Đáp án đúng</th>
          </tr>
        </thead>
         <tbody>
          <tr>
            <td>A</td>
            <td><textarea placeholder="câu trả lời" rows="2" style="width: 100%" name="name" v-model="dapanA"></textarea></td>
            <td><input type="radio" name="dap_an" value=true v-model="dapandungA"></td>
          </tr>
          <tr>
            <td>B</td>
            <td><textarea placeholder="câu trả lời" rows="2" style="width: 100%" name="name" v-model="dapanB"></textarea></td>
            <td><input type="radio" name="dap_an" value=true v-model="dapandungB" ></td>
          </tr>
          <tr>
            <td>C</td>
            <td><textarea placeholder="câu trả lời" rows="2" name="name" style="width: 100%"  v-model="dapanC"></textarea></td>
            <td><input type="radio" name="dap_an" value=true v-model="dapandungC"></td>
          </tr>
          <tr>
            <td>D</td>
            <td><textarea placeholder="câu trả lời" rows="2" name="name" style="width: 100%" v-model="dapanD"></textarea></td>
            <td><input type="radio" name="dap_an" value=true v-model="dapandungD"></td>
          </tr>
        </tbody>
    </table>
        <button class="btn btn-danger" @click="nhap">Nhập câu hỏi</button> 
    </div>
</template>
<script>
export default {
     props: ['id'],
     data(){
         return{
            noidung:null,
            dapandungA:"false",
            dapandungB:"false",
            dapandungC:"false",
            dapandungD:"false",
            dapanA:null,
            dapanB:null,
            dapanC:null,
            dapanD:null,
            data:[]
         }

     },
     methods: {
         nhap(){
             this.data = []
             this.data.push({'name':this.dapanA,'dap_an':this.dapandungA})
              this.data.push({'name':this.dapanB,'dap_an':this.dapandungB})
               this.data.push({'name':this.dapanC,'dap_an':this.dapandungC})
                this.data.push({'name':this.dapanD,'dap_an':this.dapandungD})
             axios.post('/questionadd', {
                    package_id: this.id,
                    noidung:this.noidung,
                    dapan:this.data
             }).then(res=>{
                alert("Nhập câu hỏi thành công");
                location.reload();
             })
         }
     },
     watch:{
         dapandungA()   {
            if(this.dapandungA == "true"){
                this.dapandungB = "false"
                this.dapandungC = "false"
                this.dapandungD = "false"
            }
         },
         dapandungB()   {
            if(this.dapandungB == "true"){
                this.dapandungA = "false"
                this.dapandungC = "false"
                this.dapandungD = "false"
            }
         },
         dapandungC()   {
            if(this.dapandungC == "true"){
                this.dapandungB = "false"
                this.dapandungA = "false"
                this.dapandungD = "false"
            }
         },
         dapandungD()   {
            if(this.dapandungD == "true"){
                this.dapandungB = "false"
                this.dapandungC = "false"
                this.dapandungA = "false"
            }
         }
     }
}
</script>
