const fetch=require('node-fetch')
const f1=()=>{
    console.log("f1");

}
const   f2 = ()=> { return  new Promise( (resolve,reject) => {
    setTimeout(()=>{
        console.log('f2');
        resolve('test reject')
        // return  'test'
    },2000)
});
}
const f3=   ()=>{
    console.log('f3');
}
const  f4 = async ()=>{
   const rep= await fetch(`https://api.github.com/users`);
const data =await rep.json();
return data;
}
f1()
 const test=f2()
  console.log('test '+test);
f2().then( r=>   console.log("r est "+r)).catch(err=> console.log(err));
f3()
const data=f4();
// data.then(data=>  console.log(data))
// console.log('fin '+data)
