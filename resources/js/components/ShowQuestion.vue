<template>
    <div>
        <h5>Đang có: {{this.i}} câu hỏi trong gói</h5>
        <div v-for="(question,index) in questions" >
            <h5>Câu {{index+1}}</h5><button type="button" class="btn btn-danger">Xóa</button>
           <p>{{question.name}}</p> 
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
         <tbody v-if="answer.question_id == question.id" v-for="answer in answers">
             <td>A</td>
          <td>{{answer.name}}</td>
          <td>{{answer.dap_an}}</td>
        </tbody>
    </table>
           </div>
           <br>
        </div>
           <hr>
    </div>
</template>
<script>
export default {
    props: ['questions'],
    data(){
        return {            
            show: false,
            answers: null,
            i: 0,
        }
    },
    methods: {
        
    
    },
    mounted(){
            axios.get('/answer/')
            .then(res=>{ this.answers = res.data.resuft});   
            for (var question in this.questions) { this.i++ };

    }
}
</script>
