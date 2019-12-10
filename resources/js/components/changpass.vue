<template>
  <div class="col-md-5">
    <div class="card">
      <div class="card-body">
        <div style="text-align:center">
          <div style="display: inline-block">
            <img
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541418/hoithi/logovuong_x7frmn.gif"
              style="width: 30%;"
            />
          </div>
          <br />
          <br />
          <h6>HỘI THI AN TOÀN VỆ SINH VIÊN GIỎI</h6>
          <h6>TOÀN QUỐC NGÀNH XÂY DỰNG</h6>
        </div>
        <hr />
        <div class="form-group row">
          <div class="col-md-12">
            <label for="password" style="font-weight: bold;">Quản trị</label>
            <input type="password" class="form-control" v-model="quantri" />
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <label for="email" style="font-weight: bold;">Địa chỉ email</label>
            <input type="email" class="form-control" v-model="email" />
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <label for="password" style="font-weight: bold;">Mật khẩu</label>
            <input type="password" class="form-control" v-model="password" />
          </div>
        </div>
        <div class="form-group row mb-0">
          <div class="col-md-12">
            <button
              type="submit"
              class="btn btn-primary"
              style="width:  100%;font-weight: bold"
              @click="changPass()"
            >CẬP NHẬT</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      quantri: "",
      email: "",
      password: ""
    };
  },
  methods: {
    async changPass() {
      await axios.post("/doipass", {
        quantri: this.quantri,
        email: this.email,
        password: this.password
      });
      alert("Thành công");
    }
  }
};
</script>