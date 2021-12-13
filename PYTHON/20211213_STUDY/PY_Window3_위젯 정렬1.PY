from tkinter import *
from tkinter import messagebox

def clickButton() :
    messagebox.showinfo('버튼 클릭', '버튼을 클릭했습니다')

window = Tk()
window.geometry("300x300")

button1 = Button(window, text="버튼1", command=clickButton)
button2 = Button(window, text="버튼2", command=clickButton)
button3 = Button(window, text="버튼3", command=clickButton)

button1.pack(side=LEFT)
button2.pack(side=LEFT)
button3.pack(side=LEFT)

window.mainloop()