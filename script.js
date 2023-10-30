const { createApp } = Vue;

createApp ({

data(){
  return {
    taskList: [],
    newTask: ''
  }
},

methods: {
 addTask(){
  this.taskList.push(this.newTask)
  this.newTask = ""
 }
},

mounted() {
  console.log(this.newTask)
}


}).mount("#App");