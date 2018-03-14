Attribute VB_Name = "Module1"
Function leter_grade(o As Double, opm As Double, w As Double, wpm As Double, p As Double, ppm As Double, t As Double)
Dim letter As String
If o >= opm Then
    If w >= wpm Then
        If ppm > 0 Then
            If p >= ppm Then
                letter = get_grade(t)
            Else
            letter = "F"
            End If
        Else
            If t >= 33 Then
                letter = get_grade(t)
            Else
            letter = "F"
            End If
        End If
    Else
    letter = "F"
    End If
Else
letter = "F"
End If

leter_grade = letter
End Function

Function get_grade(mark As Double)
Dim letter As String
If mark >= 80 Then
letter = "A+"
ElseIf mark >= 70 Then
letter = "A"
ElseIf mark >= 60 Then
letter = "A-"
ElseIf mark >= 50 Then
letter = "B"
ElseIf mark >= 40 Then
letter = "C"
ElseIf mark >= 33 Then
letter = "D"
Else
letter = "F"
End If
get_grade = letter
End Function

Function get_point(grade As String)
Dim point As String

Select Case grade
    Case "A+"
        point = "5.00"
    Case "A"
        point = "4.00"
    Case "A-"
        point = "3.50"
    Case "B"
        point = "3.00"
    Case "C"
        point = "2.00"
    Case "D"
        point = "1.00"
    Case Else
        point = "0.00"
End Select
get_point = point
End Function
