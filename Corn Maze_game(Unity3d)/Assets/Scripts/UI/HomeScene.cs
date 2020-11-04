using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class HomeScene : MonoBehaviour
{
    public void CornMazeLogoClick()
    {
        Application.LoadLevel("Game");
    }

    public void CitrouillevilleLogoClick()
    {
        Application.LoadLevel("Citrouilleville Info");
    }
}
