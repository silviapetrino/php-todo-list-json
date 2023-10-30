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
  this.taskList.unshift(this.newTask)

  const data = new FormData();
  data.append('todoTask', this.newTask)
  axios.post(this.apiUrl, data)
  .then(result => {
    console.log(result);
  })
 },
 removeTask(index) {
   this.taskList.splice(index, 1)

   const data = new FormData();
   data.append('removedTask', index);
 
   axios.post(this.apiUrl, data)
    .then((result) => {
     console.log(result)
    })
 
   },
},

mounted(){
  // console.log(this.addTask)
}


}).mount("#App");