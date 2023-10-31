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
  this.taskList.unshift({ text: this.newTask, done: false })

  const data = new FormData();
  // Converto l'oggetto in una stringa JSON

  data.append('todoTask', JSON.stringify(newTask));
  axios.post(this.apiUrl, data)
  .then(result => {
    this.taskList = result.data;
  });
  this.newTask.text = '';
 },
 removeTask(index) {
   this.taskList.splice(index, 1)

   const data = new FormData();
   data.append('removedTask', index);
 
   axios.post(this.apiUrl, data)
    .then((result) => {
      this.taskList = result.data;
    })
 
   },
},

mounted(){
  // console.log(this.addTask)
}


}).mount("#App");