using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MoviFaca_Usuario.Vista.Menu
{
    public class MenuUsuarioFlyoutMenuItem
    {
        public MenuUsuarioFlyoutMenuItem()
        {
            TargetType = typeof(MenuUsuarioFlyoutMenuItem);
        }
        public int Id { get; set; }
        public string Title { get; set; }

        public Type TargetType { get; set; }
        public string Icono { get; set; }
    }
}