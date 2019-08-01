<template>
    <div>
        <label class="label">Câu hỏi</label>
        <br>
        <div class="row"><textarea placeholder="Nội dung câu hỏi" rows="5" style="width: 100%"></textarea></div>
        <br>
        <label class="label">Câu trả lời</label>
        <table
        class="table table-bordered table-striped dataTable"
        role="grid"
        style="margin-top: 20px;"
      >
        <thead>
          <tr role="row">
            <th>Phương án</th>
            <th>Câu trả lời</th>
            <th>Đáp án đúng</th>
          </tr>
        </thead>
         <tbody>
          <tr>
            <td>A</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>B</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>C</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>D</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
    </table>
    </div>
</template>
<script>
export default {
    
}
</script>
