from tkinter import *
window = Tk()
#이 부분에 화면을 구성한다.
window.title("연습")
window.geometry("400x400")
window.resizable(height=False, width=False)

label1 = Label(window, text="This is 윈도창")
label2 = Label(window, text="연습 중이다", font=("궁서체", 30))
label3 = Label(window, text="얼른하자", foreground="red" ,background="black", anchor="se", height=2, width=10)

label1.pack()
label2.pack()
label3.pack()
#여기까지
window.mainloop()