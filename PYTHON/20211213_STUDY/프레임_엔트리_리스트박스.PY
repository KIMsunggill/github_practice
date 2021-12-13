from tkinter import *
window = Tk()
window.geometry("400x400")

upFrame = Frame(window)
upFrame.pack()
downFrame = Frame(window)
downFrame.pack()

editBox = Entry(upFrame, width=10, bg='green')
editBox.pack(padx=20, pady=20)

listBox = Listbox(downFrame, bg="yellow")
listBox.pack()

listBox.insert(END, "하나")
listBox.insert(END, "둘")

window.mainloop()