const displayTime = document.getElementById('date') // get reference to the <p> tag using id='date'

const now = new Date()
const day = now.getDay() // 0-6
const DAYS = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

const format = (num) => num < 10 ? `0${num}` : num  

// get days, months, year
const dd = now.getDate()
const mm = now.getMonth() + 1
const yyyy = now.getFullYear()

// get hours, mins, seconds
const h = now.getHours() 
const m = now.getMinutes()
const s = now.getSeconds()


const prepand = h <= 12 ? 'AM' : 'PM' 

// format date and time using template literal (string formatting)
const dateFormatted = `${format(mm)}/${format(dd)}/${yyyy}`
const timeFormatted = `${format(h)}:${format(m)}:${format(s)} ${prepand}`

// change display inner text
displayTime.innerText = `Today is: ${DAYS[day]}, ${dateFormatted}, ${timeFormatted}`
// Date.now();
// alert(`Today is ${DAYS[day]}, `)

const a = `Date is ${dateFormatted}`;
alert(a);