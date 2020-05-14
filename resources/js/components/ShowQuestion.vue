<template>
  <div>
    <h5>Đang có: {{this.i}} câu hỏi trong gói</h5>
    <div v-for="(question,index) in questions">
      <h5>Câu {{index+1}}</h5>
      <button type="button" class="btn btn-danger" @click="xoa(question.id)">Xóa</button>
      <br>
      <div>STT câu hỏi: </div> <input type="number" v-model="question.stt" /> <button @click="updateSTT(question.id, question.stt)">Cập nhật STT</button>
      <p>{{question.name}}</p>
      <img v-if="question.image_url != null && question.image_url != ''" :src="question.image_url" style="width: 100%; height: auto">
      <h6>Đáp án</h6>
      <div>
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
          <!-- <tbody v-if="answer.question_id == question.id" v-for="(answer, index) in answers"> -->
          <tbody  v-for="(answer, index) in question.answer">
            <td>{{phuongAn(index)}}</td>
            <td>{{answer.name}}</td>
            <td>{{dapAnDung(answer.dap_an)}}</td>
          </tbody>
        </table>
      </div>
      <br />
    </div>
    <hr />
  </div>
</template>
<script>
export default {
  props: ["questions", "package_id"],
  data() {
    return {
      show: false,
      answers: null,
      i: 0
    };
  },
  methods: {
    xoa(id) {
      if (confirm("Xóa câu hỏi")) {
        axios.delete("/question/" + id + "/delete").then(res => {
          $(this.$el).fadeOut(800, () => {
            window.location.href = "/question/" + this.package_id;
          });
        });
      }
    },
    updateSTT(id, stt){
      axios.post("/question/" + id + "/updatestt", {stt: stt}).then(res => {
        alert('Cập nhật số thứ tự thành công')
      })
    },
    phuongAn(a) {
      if (a == 0){ return "A"}
      if (a == 1){ return "B"}
      if (a == 2){ return "C"}
      if (a == 3){ return "D"}
    },
    dapAnDung(d) {
      if (d == 0) {
        return "Sai";
      } else {
        return "Đúng";
      }
    }
  },
  mounted() {
    axios.get("/answer").then(res => {
      this.answers = res.data.resuft;
    });
    console.log(this.questions)
    for (var question in this.questions) {
      this.i++;
    }
  }
};
</script>
