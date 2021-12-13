from tkinter import *
window = Tk()

# mainMenu = Menu(window)
# window.config(menu=mainMenu)
# fileMenu = Menu(mainMenu)

# mainMenu.add_cascade(label="파일", menu=fileMenu)
# fileMenu.add_command(label="열기")
# fileMenu.add_command(label="종료")

ama = Menu(window)
window.config(menu=ama)
bmb = Menu(ama)

ama.add_cascade(label="파일", menu=bmb)
bmb.add_command(label="열기")
bmb.add_separator()
bmb.add_command(label="닫기")

window.mainloop()