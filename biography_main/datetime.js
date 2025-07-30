const displayTime = document.getElementById('date')

const now = new Date()
const day = now.getDay() // 0-6
const DAYS = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

const format = (num) => num < 10 ? `0${num}` : num  

const dd = now.getDate()
const mm = now.getMonth() + 1
const yyyy = now.getFullYear()

const h = now.getHours() 
const m = now.getMinutes()
const s = now.getSeconds()



const prepand = h <= 12 ? 'PM' : 'AM' 
const dateFormatted = `${format(mm)}/${format(dd)}/${yyyy}`
const timeFormatted = `${format(h)}:${format(m)}:${format(s)}`

displayTime.innerText = `${DAYS[day]}, ${dateFormatted}, ${timeFormatted}`
// Date.now();
// alert(`Today is ${DAYS[day]}, `)

const a = `Date is ${dateFormatted}`;
alert(a);