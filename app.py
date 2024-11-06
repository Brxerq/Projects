import sys
import tkinter as tk
from tkinter import messagebox
from PIL import Image, ImageTk
import threading
import cv2
from anti_spoofing import AntiSpoofingSystem

class AntiSpoofingGUI:
    def __init__(self, anti_spoofing_system):
        self.anti_spoofing_system = anti_spoofing_system
        self.window = tk.Tk()
        self.window.title("Anti-Spoofing System")

        self.student_id_label = tk.Label(self.window, text="Student ID:")
        self.student_id_label.pack()
        self.student_id_entry = tk.Entry(self.window)
        self.student_id_entry.pack()

        self.student_name_label = tk.Label(self.window, text="Student Name:")
        self.student_name_label.pack()
        self.student_name_entry = tk.Entry(self.window)
        self.student_name_entry.pack()

        self.start_button = tk.Button(self.window, text="Start", command=self.start_anti_spoofing)
        self.start_button.pack()

        self.image_label = tk.Label(self.window)
        self.image_label.pack()

        # Create a PhotoImage object to use for the video feed
        self.photo = ImageTk.PhotoImage("RGB", (640, 480))

    def start_anti_spoofing(self):
        self.student_id = self.student_id_entry.get()
        self.student_name = self.student_name_entry.get()

        if not self.student_id or not self.student_name:
            messagebox.showwarning("Warning", "Please enter both Student ID and Name")
            return

        threading.Thread(target=self.run_anti_spoofing, daemon=True).start()

    def run_anti_spoofing(self):
        self.anti_spoofing_system.student_id = self.student_id
        self.anti_spoofing_system.student_name = self.student_name
        self.anti_spoofing_system.run(self.update_frame)

    def update_frame(self, frame):
        cv2image = cv2.cvtColor(frame, cv2.COLOR_BGR2RGBA)
        self.photo.paste(Image.fromarray(cv2image))
        self.image_label.config(image=self.photo)
        self.image_label.update_idletasks()

    def run(self):
        self.window.mainloop()

if __name__ == "__main__":
    anti_spoofing_system = AntiSpoofingSystem()
    gui = AntiSpoofingGUI(anti_spoofing_system)
    gui.run()
