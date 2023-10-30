const { createApp } = Vue;

createApp ({

data(){
  return {
    taskList: [],
    newTask: '',
    apiUrl: 'server.php'
  }
},

methods: {
 addTask(){
  this.taskList.push(this.newTask)
  const data = new FormData();
  data.append('todoTask', this.newTask)
  axios.post(this.apiUrl, data)
  .then(result => {
    console.log(result.data)
  })
 }
},
mounted(){
  console.log(this.addTask)
}


}).mount("#App");