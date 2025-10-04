using Microsoft.AspNetCore.Mvc;

namespace FirstAidWeb.Controllers
{
    public class FirstAidController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }

        public IActionResult BandageCut()
        {
            ViewBag.Message = "1. Wash your hands.\n2. Clean the wound gently.\n3. Apply antiseptic.\n4. Cover with a sterile bandage.";
            return View("Index");
        }

        public IActionResult TreatBurn()
        {
            ViewBag.Message = "1. Cool the burn with running water for 10-20 mins.\n2. Do not apply ice.\n3. Cover with clean, non-stick cloth.";
            return View("Index");
        }

        public IActionResult CPRSteps()
        {
            ViewBag.Message = "1. Call emergency services.\n2. Place the person on their back.\n3. Start chest compressions (100-120 per min).\n4. Give rescue breaths if trained.";
            return View("Index");
        }
    }
}
