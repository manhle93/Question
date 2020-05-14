<template >
  <div>
    <h2 style="font-family: 'Times New Roman'">Gói {{name.name}}</h2>
    <br />
    <a href="/home">
      <button
        type="button"
        style="width: 450px; height: 50px; font-weight: bold; font-family: 'Times New Roman', Times, serif; font-size: 20px;"
        class="btn btn-success"
      >Trang chủ</button>
    </a>
    <a href="/package">
      <button
        type="button"
        style="width: 450px; height: 50px; font-weight: bold; font-family: 'Times New Roman', Times, serif; font-size: 20px;"
        class="btn btn-warning"
      >Các gói câu hỏi</button>
    </a>
    <hr />
    <label class="label">Câu hỏi</label>
    <br />
    <div class="row">
      <textarea placeholder="Nội dung câu hỏi" rows="5" style="width: 100%" v-model="noidung"></textarea>
    </div>
    <br>
    <h6>Số thứ tự câu hỏi</h6>
    <div class="row">
      <input placeholder=" Nhập số thứ tự câu hỏi" type="number" style="width: 20%" v-model="stt">
    </div>
    <br />
    <h6>Hình ảnh đính kèm</h6>
    <img :src="imageUrl" style="width: 180px; height:180px" />
    <input ref="upload-image" class="upload-image" type="file" @change="handleChange($event)" />
    <br />
    <br>  
    <div v-if="tienTrinh" style="width: 180px; height: 10px; border: 1px solid black;">
      <div v-bind:style="{'width': tienTrinh + '%', 'background-color': 'green', 'height': '100%'}"></div>
    </div>
        <div v-if="tienTrinh && tienTrinh < 100" > Đang tải ảnh lên: {{tienTrinh}} % </div>
        <div v-if="tienTrinh == 100">Hình ảnh đã được tải lên</div>
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
          <td>
            <textarea
              placeholder="câu trả lời"
              rows="2"
              style="width: 100%"
              name="name"
              v-model="dapanA"
            ></textarea>
          </td>
          <td>
            <input type="radio" name="dap_an" value="true" v-model="dapandungA" />
          </td>
        </tr>
        <tr>
          <td>B</td>
          <td>
            <textarea
              placeholder="câu trả lời"
              rows="2"
              style="width: 100%"
              name="name"
              v-model="dapanB"
            ></textarea>
          </td>
          <td>
            <input type="radio" name="dap_an" value="true" v-model="dapandungB" />
          </td>
        </tr>
        <tr>
          <td>C</td>
          <td>
            <textarea
              placeholder="câu trả lời"
              rows="2"
              name="name"
              style="width: 100%"
              v-model="dapanC"
            ></textarea>
          </td>
          <td>
            <input type="radio" name="dap_an" value="true" v-model="dapandungC" />
          </td>
        </tr>
        <tr>
          <td>D</td>
          <td>
            <textarea
              placeholder="câu trả lời"
              rows="2"
              name="name"
              style="width: 100%"
              v-model="dapanD"
            ></textarea>
          </td>
          <td>
            <input type="radio" name="dap_an" value="true" v-model="dapandungD" />
          </td>
        </tr>
      </tbody>
    </table>
    <button class="btn btn-danger" @click="nhap">Nhập câu hỏi</button>
  </div>
</template>
<script>
export default {
  props: ["id", "name"],
  data() {
    return {
      noidung: null,
      stt: null,
      dapandungA: "false",
      dapandungB: "false",
      dapandungC: "false",
      dapandungD: "false",
      dapanA: null,
      dapanB: null,
      dapanC: null,
      dapanD: null,
      data: [],
      imageUrl: null,
      loadAnh: false,
      tienTrinh: 0,
    };
  },
  methods: {
    handleChange(e) {
      let files = e.target.files;
      console.log(files[0].size)
      if (files[0].size > 10000000) {
          return alert('Ảnh quá lớn , dung lượng ảnh tối đa 10Mb')
      }
      let data = new FormData();
      data.append("file", files[0]);
      data.append("upload_preset", "u84rblt8");
      data.append("api_key", "599747191334322");
      this.loadAnh = true
      const config = {
        onUploadProgress: progressEvent => console.log(progressEvent.loaded)
      }
      axios
        .post("https://api.cloudinary.com/v1_1/dsobei3hp/image/upload", data, {
          headers: {
              'Content-Type': 'multipart/form-data'
          },
          onUploadProgress: function( progressEvent ) {
           this.tienTrinh = parseInt( Math.round( ( progressEvent.loaded / progressEvent.total ) * 100 ))
          }.bind(this)
        })
        .then(res => {
          console.log(res);
          this.imageUrl = res.data.url;
          this.loadAnh = false
          // axios
          //   .post("/uploadavatarclound", { image_url: this.imageUrl })
          //   .then(_ => location.reload());
        })
        .catch(err => {});
    },
    nhap() {
      this.data = [];
      this.data.push({ name: this.dapanA, dap_an: this.dapandungA });
      this.data.push({ name: this.dapanB, dap_an: this.dapandungB });
      this.data.push({ name: this.dapanC, dap_an: this.dapandungC });
      this.data.push({ name: this.dapanD, dap_an: this.dapandungD });
      if (
        this.dapandungA == this.dapandungB &&
        this.dapandungB == this.dapandungC &&
        this.dapandungC == this.dapandungD
      ) {
        alert("Chưa nhập đáp án đúng");
      } else {
        if (
          this.noidung == null ||
          this.dapanA == null ||
          this.dapanB == null ||
          this.dapanC == null ||
          this.dapanD == null ||
          this.noidung == "" ||
          this.dapanA == "" ||
          this.dapanB == "" ||
          this.dapanC == "" ||
          this.dapanD == ""
        ) {
          alert("Chưa nhập đủ nội dung");
        } else {
          axios
            .post("/questionadd", {
              package_id: this.id,
              noidung: this.noidung,
              image_url: this.imageUrl,
              dapan: this.data,
              stt: this.stt
            })
            .then(res => {
              alert("Nhập câu hỏi thành công");
              location.reload();
            });
        }
      }
    }
  },
  watch: {
    dapandungA() {
      if (this.dapandungA == "true") {
        this.dapandungB = "false";
        this.dapandungC = "false";
        this.dapandungD = "false";
      }
    },
    dapandungB() {
      if (this.dapandungB == "true") {
        this.dapandungA = "false";
        this.dapandungC = "false";
        this.dapandungD = "false";
      }
    },
    dapandungC() {
      if (this.dapandungC == "true") {
        this.dapandungB = "false";
        this.dapandungA = "false";
        this.dapandungD = "false";
      }
    },
    dapandungD() {
      if (this.dapandungD == "true") {
        this.dapandungB = "false";
        this.dapandungC = "false";
        this.dapandungA = "false";
      }
    }
  }
};
</script>
