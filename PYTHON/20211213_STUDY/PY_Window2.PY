from tkinter import *
window = Tk()
window.title("개인 연습 윈도우 창")
window.geometry("400x400")
window.resizable(height=False, width=False)

label1 = Label(window, text="가나다", font=("궁서체", 30), background="blue", foreground="red", anchor="w", height=5, width=10)
label1.pack()

window.mainloop()