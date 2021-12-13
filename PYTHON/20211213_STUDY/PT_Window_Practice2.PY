from tkinter import *
from tkinter import messagebox

def ClickBox():
    messagebox.showinfo("이건 제목", "버튼을 눌렀네")

window=Tk()
window.geometry("300x300")

button1 = Button(window, text="눌러라", command=ClickBox)
button1.pack()

window.mainloop()