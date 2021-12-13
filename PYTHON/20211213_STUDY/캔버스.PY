from tkinter import *
window = Tk()
window.resizable(height=False, width=False)

#캔버스 시작
canvas = Canvas(window, width=300, height=300)
canvas.pack()

canvas.create_line([[0,0], [70, 70], [30, 170]], fill="blue", width=3)
canvas.create_polygon([[200,200], [100, 150], [150, 150], [150, 100]], fill="red")
canvas.create_text([200, 200], text="이것이 아무개다", font=("궁서체", 18))

window.mainloop()