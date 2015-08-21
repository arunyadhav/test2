The syntax for declaring data section is:
section . data

The bss section is used for declaring variables. The syntax for declaring bss section
is:
section . bss

The syntax for declaring text section is:
section . text
 global _start
_start:

Following are some examples of typical assembly language statements:
INC COUNT ; Increment the memory variable COUNT
MOV TOTAL, 48 ; Transfer the value 48 in the
 ; memory variable TOTAL
ADD AH, BH ; Add the content of the
 ; BH register into the AH register
AND MASK1, 128 ; Perform AND operation on the
 ; variable MASK1 and 128
ADD MARKS, 10 ; Add 10 to the variable MARKS
MOV AL, 10 ; Transfer the value 10 to the AL register

HELLOWORD PROGRAM
section . text
 global _start ; must be declared for linker (ld)
_start:  ; tells linker entry point
 mov edx, len ; message length
 mov ecx, msg ; message to write
 mov ebx, 1 ; file descriptor (stdout)
 mov eax, 4 ; system call number (sys_write)
 int 0x80 ; call kernel
 mov eax, 1 ; system call number (sys_exit)
 int 0x80 ; call kernel
section . data
msg db 'Hello, world!' , 0xa ; our dear string
len equ $ - msg ; length of our dear string


Compiling and Linking an Assembly Program in NASM
Make sure you have set the path of nasm and ld binaries in your PATH
environment variable. Now, take the following steps for compiling and linking the
above program:
 Type the above code using a text editor and save it as hello.asm.
 Make sure that you are in the same directory as where you saved hello.asm.
 To assemble the program, type nasm -f elf hello.asm
 If there is any error, you will be prompted about that at this stage.
Otherwise, an object file of your program named hello.o will be created.
 To link the object file and create an executable file named hello, type ld -m
elf_i386 -s -o hello hello.o
 Execute the program by typing ./hello
If you have done everything correctly, it will display Hello, world! on the screen.
