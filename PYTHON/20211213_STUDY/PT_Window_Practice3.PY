from tkinter import *
from tkinter import messagebox

def ClickBox():
    messagebox.showinfo("이건 제목", "버튼을 눌렀네")

window=Tk()
window.geometry("300x300")

btnList = [None] * 4

for i in range(0, 4):
    btnList[i] = Button(window, text=str(i+1) + "번 버튼", command=ClickBox)
for btn in btnList:
    btn.pack()

window.mainloop()