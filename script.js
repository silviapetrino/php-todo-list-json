const { createApp } = Vue;

createApp ({

data(){
  return {
    taskList: [],
    newTask: '',
    apiUrl: 'server.php',
    done: false
  }
},

methods: {
 addTask(){
  this.taskList.unshift(this.newTask)

  const data = new FormData();
  
  data.append('todoTask', this.newTask);
  axios.post(this.apiUrl, data)
  .then(result => {
    console.log(result)
  });
  this.newTask = '';
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

   toggleTaskDone() {
    this.done = !this.done

    const data = new FormData();
    data.append('doneTask', this.done);

    axios.post(this.apiUrl, data)
      .then((result) => {
        console.log(result)
      })

   }
 
},

mounted(){
  // console.log(this.addTask)
}


}).mount("#App");