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
 }
}


}).mount("#App");